<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\CreateStreamGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property 'gen4n_high'|'gen4n_ultra'|'gen4n_win2022'|'gen5n_high'|'gen5n_ultra'|'gen5n_win2022'|'gen6n_small'|'gen6n_medium'|'gen6n_high'|'gen6n_ultra'|'gen6n_ultra_win2022'|'gen6n_pro'|'gen6n_pro_win2022' $StreamClass
 * @property string|null $DefaultApplicationIdentifier
 * @property list<Shapes\LocationConfiguration>|null $LocationConfigurations
 * @property array<string, string>|null $Tags
 * @property string|null $ClientToken
 */
class CreateStreamGroupRequest extends Request
{
    /**
     * @param array{
     *     Description: string,
     *     StreamClass: 'gen4n_high'|'gen4n_ultra'|'gen4n_win2022'|'gen5n_high'|'gen5n_ultra'|'gen5n_win2022'|'gen6n_small'|'gen6n_medium'|'gen6n_high'|'gen6n_ultra'|'gen6n_ultra_win2022'|'gen6n_pro'|'gen6n_pro_win2022',
     *     DefaultApplicationIdentifier?: string|null,
     *     LocationConfigurations?: list<Shapes\LocationConfiguration>|null,
     *     Tags?: array<string, string>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
