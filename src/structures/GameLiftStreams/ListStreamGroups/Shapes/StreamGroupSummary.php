<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\ListStreamGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string|null $Id
 * @property string|null $Description
 * @property DefaultApplication|null $DefaultApplication
 * @property 'gen4n_high'|'gen4n_ultra'|'gen4n_win2022'|'gen5n_high'|'gen5n_ultra'|'gen5n_win2022'|null $StreamClass
 * @property 'ACTIVATING'|'UPDATING_LOCATIONS'|'ACTIVE'|'ACTIVE_WITH_ERRORS'|'ERROR'|'DELETING'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 */
class StreamGroupSummary extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Id?: string|null,
     *     Description?: string|null,
     *     DefaultApplication?: DefaultApplication|null,
     *     StreamClass?: 'gen4n_high'|'gen4n_ultra'|'gen4n_win2022'|'gen5n_high'|'gen5n_ultra'|'gen5n_win2022'|null,
     *     Status?: 'ACTIVATING'|'UPDATING_LOCATIONS'|'ACTIVE'|'ACTIVE_WITH_ERRORS'|'ERROR'|'DELETING'|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
