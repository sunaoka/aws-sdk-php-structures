<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\GetUpgradeStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 */
class GetUpgradeStatusRequest extends Request
{
    /**
     * @param array{DomainName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
