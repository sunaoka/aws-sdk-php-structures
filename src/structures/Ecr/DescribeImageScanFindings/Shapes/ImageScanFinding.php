<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageScanFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $description
 * @property string|null $uri
 * @property 'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|'UNDEFINED'|null $severity
 * @property list<Attribute>|null $attributes
 */
class ImageScanFinding extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     description?: string|null,
     *     uri?: string|null,
     *     severity?: 'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|'UNDEFINED'|null,
     *     attributes?: list<Attribute>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
