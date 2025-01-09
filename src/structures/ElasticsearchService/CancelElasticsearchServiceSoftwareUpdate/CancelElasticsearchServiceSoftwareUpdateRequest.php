<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\CancelElasticsearchServiceSoftwareUpdate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 */
class CancelElasticsearchServiceSoftwareUpdateRequest extends Request
{
    /**
     * @param array{DomainName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
