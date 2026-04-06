<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\CreateParticipantToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stageArn
 * @property int<1, 20160>|null $duration
 * @property string|null $userId
 * @property array<string, string>|null $attributes
 * @property list<'PUBLISH'|'SUBSCRIBE'>|null $capabilities
 */
class CreateParticipantTokenRequest extends Request
{
    /**
     * @param array{
     *     stageArn: string,
     *     duration?: int<1, 20160>|null,
     *     userId?: string|null,
     *     attributes?: array<string, string>|null,
     *     capabilities?: list<'PUBLISH'|'SUBSCRIBE'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
