<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetConnectorDefinitionVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorDefinitionId
 * @property string $ConnectorDefinitionVersionId
 * @property string|null $NextToken
 */
class GetConnectorDefinitionVersionRequest extends Request
{
    /**
     * @param array{
     *     ConnectorDefinitionId: string,
     *     ConnectorDefinitionVersionId: string,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
