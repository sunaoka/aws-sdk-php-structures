<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\CreateAppMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AllowCookies
 * @property bool|null $EnableXRay
 * @property list<string>|null $ExcludedPages
 * @property list<string>|null $FavoritePages
 * @property string|null $GuestRoleArn
 * @property string|null $IdentityPoolId
 * @property list<string>|null $IncludedPages
 * @property double|null $SessionSampleRate
 * @property list<'errors'|'performance'|'http'>|null $Telemetries
 */
class AppMonitorConfiguration extends Shape
{
    /**
     * @param array{
     *     AllowCookies?: bool|null,
     *     EnableXRay?: bool|null,
     *     ExcludedPages?: list<string>|null,
     *     FavoritePages?: list<string>|null,
     *     GuestRoleArn?: string|null,
     *     IdentityPoolId?: string|null,
     *     IncludedPages?: list<string>|null,
     *     SessionSampleRate?: double|null,
     *     Telemetries?: list<'errors'|'performance'|'http'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
