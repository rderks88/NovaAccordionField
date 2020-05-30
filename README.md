![](https://img.shields.io/github/stars/iMuMz/NovaAccordionField?&style=flat-square)
![GitHub release (latest by date)](https://img.shields.io/github/v/release/iMuMz/NovaAccordionField?color=yellow&style=flat-square)
![Packagist](https://img.shields.io/packagist/dt/imumz/nova-accordion-field?color=green&logo=testing&style=flat-square)
# NovaAccordionField
A simple vue.js accordion component for Laravel Nova.

![image](https://user-images.githubusercontent.com/22936672/83330424-0ff5a000-a28f-11ea-935b-cf9d68c3925e.png)

### Installation

```
composer require imumz/nova-accordion-field
```

### Usage

```
use Imumz\NovaAccordionField\NovaAccordionField;
...
public function fields(Request $request)
    {
        $array = [
            0 => [
                'name' => 'John Doe',
                'text' => 'john@example.com'
            ],
            1 => [
                'name' => 'Jane Doe',
                'text' => 'jane@example.com'
            ],
            2 => [
                'name' => 'Tom Doe',
                'text' => 'tom@example.com'
            ],
        ];

        return [
            NovaAccordionField::make('')
            ->data($array)
            ->title('name')
            ->description('text')
        ];
    }
```
