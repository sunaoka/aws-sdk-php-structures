<?php

namespace Sunaoka\Aws\Structures\Interconnect\GetConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $description
 * @property string $bandwidth
 * @property AttachPoint $attachPoint
 * @property string $environmentId
 * @property Provider $provider
 * @property string $location
 * @property string $type
 * @property 'available'|'requested'|'pending'|'down'|'deleting'|'deleted'|'failed'|'updating' $state
 * @property string $sharedId
 * @property int<0, 8>|null $billingTier
 * @property string $ownerAccount
 * @property string $activationKey
 * @property array<string, string>|null $tags
 */
class Connection extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     description: string,
     *     bandwidth: string,
     *     attachPoint: AttachPoint,
     *     environmentId: string,
     *     provider: Provider,
     *     location: string,
     *     type: string,
     *     state: 'available'|'requested'|'pending'|'down'|'deleting'|'deleted'|'failed'|'updating',
     *     sharedId: string,
     *     billingTier?: int<0, 8>|null,
     *     ownerAccount: string,
     *     activationKey: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
