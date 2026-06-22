<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\RunMicrovm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ingressNetworkConnectors
 * @property list<string>|null $egressNetworkConnectors
 * @property string $imageIdentifier
 * @property string|null $imageVersion
 * @property string|null $executionRoleArn
 * @property Shapes\IdlePolicy|null $idlePolicy
 * @property Shapes\Logging|null $logging
 * @property string|null $runHookPayload
 * @property int<1, 28800>|null $maximumDurationInSeconds
 * @property string|null $clientToken
 */
class RunMicrovmRequest extends Request
{
    /**
     * @param array{
     *     ingressNetworkConnectors?: list<string>|null,
     *     egressNetworkConnectors?: list<string>|null,
     *     imageIdentifier: string,
     *     imageVersion?: string|null,
     *     executionRoleArn?: string|null,
     *     idlePolicy?: Shapes\IdlePolicy|null,
     *     logging?: Shapes\Logging|null,
     *     runHookPayload?: string|null,
     *     maximumDurationInSeconds?: int<1, 28800>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
