<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\StartElasticsearchServiceSoftwareUpdate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 */
class StartElasticsearchServiceSoftwareUpdateRequest extends Request
{
    /**
     * @param array{DomainName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
