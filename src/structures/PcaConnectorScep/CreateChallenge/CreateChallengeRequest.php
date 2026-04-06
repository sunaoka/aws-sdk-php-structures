<?php

namespace Sunaoka\Aws\Structures\PcaConnectorScep\CreateChallenge;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorArn
 * @property string|null $ClientToken
 * @property array<string, string>|null $Tags
 */
class CreateChallengeRequest extends Request
{
    /**
     * @param array{
     *     ConnectorArn: string,
     *     ClientToken?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
