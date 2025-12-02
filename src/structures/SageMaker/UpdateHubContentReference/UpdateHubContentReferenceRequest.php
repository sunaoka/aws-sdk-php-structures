<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateHubContentReference;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HubName
 * @property string $HubContentName
 * @property 'Model'|'Notebook'|'ModelReference'|'DataSet'|'JsonDoc' $HubContentType
 * @property string|null $MinVersion
 */
class UpdateHubContentReferenceRequest extends Request
{
    /**
     * @param array{
     *     HubName: string,
     *     HubContentName: string,
     *     HubContentType: 'Model'|'Notebook'|'ModelReference'|'DataSet'|'JsonDoc',
     *     MinVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
