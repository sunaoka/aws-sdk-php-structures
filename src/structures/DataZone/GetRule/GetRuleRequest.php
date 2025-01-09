<?php

namespace Sunaoka\Aws\Structures\DataZone\GetRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $identifier
 * @property string $revision
 */
class GetRuleRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     identifier: string,
     *     revision?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
