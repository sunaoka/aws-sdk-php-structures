<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\CreateStreamGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string|null $DefaultApplicationIdentifier
 * @property string $Description
 * @property list<Shapes\LocationConfiguration>|null $LocationConfigurations
 * @property 'gen4n_high'|'gen4n_ultra'|'gen4n_win2022'|'gen5n_high'|'gen5n_ultra'|'gen5n_win2022' $StreamClass
 * @property array<string, string>|null $Tags
 */
class CreateStreamGroupRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     DefaultApplicationIdentifier?: string|null,
     *     Description: string,
     *     LocationConfigurations?: list<Shapes\LocationConfiguration>|null,
     *     StreamClass: 'gen4n_high'|'gen4n_ultra'|'gen4n_win2022'|'gen5n_high'|'gen5n_ultra'|'gen5n_win2022',
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
