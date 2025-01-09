<?php

namespace Sunaoka\Aws\Structures\FMS\PutPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Policy $Policy
 * @property list<Shapes\Tag> $TagList
 */
class PutPolicyRequest extends Request
{
    /**
     * @param array{
     *     Policy: Shapes\Policy,
     *     TagList?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
