<?php

namespace Sunaoka\Aws\Structures\DataZone\RejectPredictions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $domainIdentifier
 * @property string $identifier
 * @property list<Shapes\RejectChoice>|null $rejectChoices
 * @property Shapes\RejectRule|null $rejectRule
 * @property string|null $revision
 */
class RejectPredictionsRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     domainIdentifier: string,
     *     identifier: string,
     *     rejectChoices?: list<Shapes\RejectChoice>|null,
     *     rejectRule?: Shapes\RejectRule|null,
     *     revision?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
