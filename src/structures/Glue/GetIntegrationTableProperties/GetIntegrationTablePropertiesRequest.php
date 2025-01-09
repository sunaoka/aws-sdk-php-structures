<?php

namespace Sunaoka\Aws\Structures\Glue\GetIntegrationTableProperties;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property string $TableName
 */
class GetIntegrationTablePropertiesRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     TableName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
