<?php

namespace Sunaoka\Aws\Structures\CloudSearch\BuildSuggesters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 */
class BuildSuggestersRequest extends Request
{
    /**
     * @param array{DomainName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
