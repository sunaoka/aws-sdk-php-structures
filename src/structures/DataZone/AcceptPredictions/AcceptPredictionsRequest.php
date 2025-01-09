<?php

namespace Sunaoka\Aws\Structures\DataZone\AcceptPredictions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AcceptChoice> $acceptChoices
 * @property Shapes\AcceptRule $acceptRule
 * @property string $clientToken
 * @property string $domainIdentifier
 * @property string $identifier
 * @property string $revision
 */
class AcceptPredictionsRequest extends Request
{
    /**
     * @param array{
     *     acceptChoices?: list<Shapes\AcceptChoice>,
     *     acceptRule?: Shapes\AcceptRule,
     *     clientToken?: string,
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
