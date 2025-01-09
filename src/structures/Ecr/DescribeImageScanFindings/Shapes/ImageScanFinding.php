<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageScanFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $description
 * @property string $uri
 * @property 'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|'UNDEFINED' $severity
 * @property list<Attribute> $attributes
 */
class ImageScanFinding extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     description?: string,
     *     uri?: string,
     *     severity?: 'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|'UNDEFINED',
     *     attributes?: list<Attribute>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
