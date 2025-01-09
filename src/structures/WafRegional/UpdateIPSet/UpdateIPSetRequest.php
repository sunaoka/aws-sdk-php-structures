<?php

namespace Sunaoka\Aws\Structures\WafRegional\UpdateIPSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IPSetId
 * @property string $ChangeToken
 * @property list<Shapes\IPSetUpdate> $Updates
 */
class UpdateIPSetRequest extends Request
{
    /**
     * @param array{
     *     IPSetId: string,
     *     ChangeToken: string,
     *     Updates: list<Shapes\IPSetUpdate>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
