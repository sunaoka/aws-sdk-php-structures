<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteHubContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HubName
 * @property 'Model'|'Notebook'|'ModelReference' $HubContentType
 * @property string $HubContentName
 * @property string $HubContentVersion
 */
class DeleteHubContentRequest extends Request
{
    /**
     * @param array{
     *     HubName: string,
     *     HubContentType: 'Model'|'Notebook'|'ModelReference',
     *     HubContentName: string,
     *     HubContentVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
