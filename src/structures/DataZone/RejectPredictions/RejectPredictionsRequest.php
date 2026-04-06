<?php

namespace Sunaoka\Aws\Structures\DataZone\RejectPredictions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $identifier
 * @property string|null $revision
 * @property Shapes\RejectRule|null $rejectRule
 * @property list<Shapes\RejectChoice>|null $rejectChoices
 * @property string|null $clientToken
 */
class RejectPredictionsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     identifier: string,
     *     revision?: string|null,
     *     rejectRule?: Shapes\RejectRule|null,
     *     rejectChoices?: list<Shapes\RejectChoice>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
