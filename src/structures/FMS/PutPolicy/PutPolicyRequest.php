<?php

namespace Sunaoka\Aws\Structures\FMS\PutPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Policy $Policy
 * @property list<Shapes\Tag>|null $TagList
 */
class PutPolicyRequest extends Request
{
    /**
     * @param array{
     *     Policy: Shapes\Policy,
     *     TagList?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
