<?php

namespace Sunaoka\Aws\Structures\IoTEvents\CreateDetectorModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $contentExpression
 * @property 'STRING'|'JSON' $type
 */
class Payload extends Shape
{
    /**
     * @param array{
     *     contentExpression: string,
     *     type: 'STRING'|'JSON'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
