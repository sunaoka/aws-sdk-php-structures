<?php

namespace Sunaoka\Aws\Structures\Sts\GetFederationToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Policy
 * @property list<Shapes\PolicyDescriptorType>|null $PolicyArns
 * @property int<900, 129600>|null $DurationSeconds
 * @property list<Shapes\Tag>|null $Tags
 */
class GetFederationTokenRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Policy?: string|null,
     *     PolicyArns?: list<Shapes\PolicyDescriptorType>|null,
     *     DurationSeconds?: int<900, 129600>|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
