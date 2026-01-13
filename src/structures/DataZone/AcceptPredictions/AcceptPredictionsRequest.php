<?php

namespace Sunaoka\Aws\Structures\DataZone\AcceptPredictions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $identifier
 * @property string|null $revision
 * @property Shapes\AcceptRule|null $acceptRule
 * @property list<Shapes\AcceptChoice>|null $acceptChoices
 * @property string|null $clientToken
 */
class AcceptPredictionsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     identifier: string,
     *     revision?: string|null,
     *     acceptRule?: Shapes\AcceptRule|null,
     *     acceptChoices?: list<Shapes\AcceptChoice>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
