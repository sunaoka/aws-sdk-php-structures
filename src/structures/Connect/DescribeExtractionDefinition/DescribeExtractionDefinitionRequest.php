<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeExtractionDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ExtractionDefinitionId
 */
class DescribeExtractionDefinitionRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ExtractionDefinitionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
