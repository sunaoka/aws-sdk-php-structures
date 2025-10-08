<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateHubContentPresignedUrls;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HubName
 * @property 'Model'|'Notebook'|'ModelReference' $HubContentType
 * @property string $HubContentName
 * @property string|null $HubContentVersion
 * @property Shapes\PresignedUrlAccessConfig|null $AccessConfig
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class CreateHubContentPresignedUrlsRequest extends Request
{
    /**
     * @param array{
     *     HubName: string,
     *     HubContentType: 'Model'|'Notebook'|'ModelReference',
     *     HubContentName: string,
     *     HubContentVersion?: string|null,
     *     AccessConfig?: Shapes\PresignedUrlAccessConfig|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
