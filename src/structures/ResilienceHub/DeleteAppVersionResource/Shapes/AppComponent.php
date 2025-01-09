<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DeleteAppVersionResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, list<string>> $additionalInfo
 * @property string $id
 * @property string $name
 * @property string $type
 */
class AppComponent extends Shape
{
    /**
     * @param array{
     *     additionalInfo?: array<string, list<string>>,
     *     id?: string,
     *     name: string,
     *     type: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
