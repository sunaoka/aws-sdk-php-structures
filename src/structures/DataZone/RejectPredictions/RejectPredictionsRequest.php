<?php

namespace Sunaoka\Aws\Structures\DataZone\RejectPredictions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $domainIdentifier
 * @property string $identifier
 * @property list<Shapes\RejectChoice> $rejectChoices
 * @property Shapes\RejectRule $rejectRule
 * @property string $revision
 */
class RejectPredictionsRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     domainIdentifier: string,
     *     identifier: string,
     *     rejectChoices?: list<Shapes\RejectChoice>,
     *     rejectRule?: Shapes\RejectRule,
     *     revision?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
