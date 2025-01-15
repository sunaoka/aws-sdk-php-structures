<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CancelDomainConfigChange;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property bool|null $DryRun
 */
class CancelDomainConfigChangeRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
