<?php

namespace Sunaoka\Aws\Structures\Sts\GetFederationToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Policy
 * @property list<Shapes\PolicyDescriptorType> $PolicyArns
 * @property int<900, 129600> $DurationSeconds
 * @property list<Shapes\Tag> $Tags
 */
class GetFederationTokenRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Policy?: string,
     *     PolicyArns?: list<Shapes\PolicyDescriptorType>,
     *     DurationSeconds?: int<900, 129600>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
