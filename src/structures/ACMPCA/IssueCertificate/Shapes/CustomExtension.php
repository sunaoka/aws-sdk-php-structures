<?php

namespace Sunaoka\Aws\Structures\ACMPCA\IssueCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ObjectIdentifier
 * @property string $Value
 * @property bool|null $Critical
 */
class CustomExtension extends Shape
{
    /**
     * @param array{
     *     ObjectIdentifier: string,
     *     Value: string,
     *     Critical?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
