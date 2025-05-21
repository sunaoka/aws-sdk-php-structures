<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\ListStreamGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property DefaultApplication|null $DefaultApplication
 * @property string|null $Description
 * @property string|null $Id
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property 'ACTIVATING'|'UPDATING_LOCATIONS'|'ACTIVE'|'ACTIVE_WITH_ERRORS'|'ERROR'|'DELETING'|null $Status
 * @property 'gen4n_high'|'gen4n_ultra'|'gen4n_win2022'|'gen5n_high'|'gen5n_ultra'|'gen5n_win2022'|null $StreamClass
 */
class StreamGroupSummary extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     DefaultApplication?: DefaultApplication|null,
     *     Description?: string|null,
     *     Id?: string|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'ACTIVATING'|'UPDATING_LOCATIONS'|'ACTIVE'|'ACTIVE_WITH_ERRORS'|'ERROR'|'DELETING'|null,
     *     StreamClass?: 'gen4n_high'|'gen4n_ultra'|'gen4n_win2022'|'gen5n_high'|'gen5n_ultra'|'gen5n_win2022'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
