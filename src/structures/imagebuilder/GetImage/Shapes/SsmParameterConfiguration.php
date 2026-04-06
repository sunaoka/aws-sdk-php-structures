<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $amiAccountId
 * @property string $parameterName
 * @property 'text'|'aws:ec2:image'|null $dataType
 */
class SsmParameterConfiguration extends Shape
{
    /**
     * @param array{
     *     amiAccountId?: string|null,
     *     parameterName: string,
     *     dataType?: 'text'|'aws:ec2:image'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
