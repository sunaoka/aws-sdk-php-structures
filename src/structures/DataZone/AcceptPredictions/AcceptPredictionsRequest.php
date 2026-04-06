<?php

namespace Sunaoka\Aws\Structures\DataZone\AcceptPredictions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AcceptChoice>|null $acceptChoices
 * @property Shapes\AcceptRule|null $acceptRule
 * @property string|null $clientToken
 * @property string $domainIdentifier
 * @property string $identifier
 * @property string|null $revision
 */
class AcceptPredictionsRequest extends Request
{
    /**
     * @param array{
     *     acceptChoices?: list<Shapes\AcceptChoice>|null,
     *     acceptRule?: Shapes\AcceptRule|null,
     *     clientToken?: string|null,
     *     domainIdentifier: string,
     *     identifier: string,
     *     revision?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
