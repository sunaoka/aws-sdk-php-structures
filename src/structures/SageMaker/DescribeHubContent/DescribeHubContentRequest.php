<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHubContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HubName
 * @property 'Model'|'Notebook'|'ModelReference' $HubContentType
 * @property string $HubContentName
 * @property string|null $HubContentVersion
 */
class DescribeHubContentRequest extends Request
{
    /**
     * @param array{
     *     HubName: string,
     *     HubContentType: 'Model'|'Notebook'|'ModelReference',
     *     HubContentName: string,
     *     HubContentVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
