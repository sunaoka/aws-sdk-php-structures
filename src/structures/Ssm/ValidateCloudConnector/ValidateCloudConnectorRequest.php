<?php

namespace Sunaoka\Aws\Structures\Ssm\ValidateCloudConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CloudConnectorId
 * @property int<0, 75>|null $MaxResults
 * @property string|null $NextToken
 */
class ValidateCloudConnectorRequest extends Request
{
    /**
     * @param array{
     *     CloudConnectorId: string,
     *     MaxResults?: int<0, 75>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
