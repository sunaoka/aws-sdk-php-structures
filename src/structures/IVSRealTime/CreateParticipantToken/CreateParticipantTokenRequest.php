<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\CreateParticipantToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string>|null $attributes
 * @property list<'PUBLISH'|'SUBSCRIBE'>|null $capabilities
 * @property int<1, 20160>|null $duration
 * @property string $stageArn
 * @property string|null $userId
 */
class CreateParticipantTokenRequest extends Request
{
    /**
     * @param array{
     *     attributes?: array<string, string>|null,
     *     capabilities?: list<'PUBLISH'|'SUBSCRIBE'>|null,
     *     duration?: int<1, 20160>|null,
     *     stageArn: string,
     *     userId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
