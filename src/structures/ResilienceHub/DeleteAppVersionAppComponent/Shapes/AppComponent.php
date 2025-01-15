<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DeleteAppVersionAppComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, list<string>>|null $additionalInfo
 * @property string|null $id
 * @property string $name
 * @property string $type
 */
class AppComponent extends Shape
{
    /**
     * @param array{
     *     additionalInfo?: array<string, list<string>>|null,
     *     id?: string|null,
     *     name: string,
     *     type: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
