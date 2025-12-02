<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteHubContentReference;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HubName
 * @property 'Model'|'Notebook'|'ModelReference'|'DataSet'|'JsonDoc' $HubContentType
 * @property string $HubContentName
 */
class DeleteHubContentReferenceRequest extends Request
{
    /**
     * @param array{
     *     HubName: string,
     *     HubContentType: 'Model'|'Notebook'|'ModelReference'|'DataSet'|'JsonDoc',
     *     HubContentName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
