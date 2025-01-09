<?php

namespace Sunaoka\Aws\Structures\PcaConnectorScep\CreateChallenge;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorArn
 * @property string $ClientToken
 * @property array<string, string> $Tags
 */
class CreateChallengeRequest extends Request
{
    /**
     * @param array{
     *     ConnectorArn: string,
     *     ClientToken?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
