<?php

namespace Sunaoka\Aws\Structures\Wickr\ListNetworks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $networkId
 * @property string $networkName
 * @property 'STANDARD'|'PREMIUM' $accessLevel
 * @property string $awsAccountId
 * @property string $networkArn
 * @property int|null $standing
 * @property string|null $freeTrialExpiration
 * @property int|null $migrationState
 * @property string|null $encryptionKeyArn
 */
class Network extends Shape
{
    /**
     * @param array{
     *     networkId: string,
     *     networkName: string,
     *     accessLevel: 'STANDARD'|'PREMIUM',
     *     awsAccountId: string,
     *     networkArn: string,
     *     standing?: int|null,
     *     freeTrialExpiration?: string|null,
     *     migrationState?: int|null,
     *     encryptionKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
