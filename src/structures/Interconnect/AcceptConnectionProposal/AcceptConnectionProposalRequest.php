<?php

namespace Sunaoka\Aws\Structures\Interconnect\AcceptConnectionProposal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AttachPoint $attachPoint
 * @property string $activationKey
 * @property string|null $description
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 */
class AcceptConnectionProposalRequest extends Request
{
    /**
     * @param array{
     *     attachPoint: Shapes\AttachPoint,
     *     activationKey: string,
     *     description?: string|null,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
