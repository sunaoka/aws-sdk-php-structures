<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\GetAppMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IdentityPoolId
 * @property list<string>|null $ExcludedPages
 * @property list<string>|null $IncludedPages
 * @property list<string>|null $FavoritePages
 * @property double|null $SessionSampleRate
 * @property string|null $GuestRoleArn
 * @property bool|null $AllowCookies
 * @property list<'errors'|'performance'|'http'>|null $Telemetries
 * @property bool|null $EnableXRay
 */
class AppMonitorConfiguration extends Shape
{
    /**
     * @param array{
     *     IdentityPoolId?: string|null,
     *     ExcludedPages?: list<string>|null,
     *     IncludedPages?: list<string>|null,
     *     FavoritePages?: list<string>|null,
     *     SessionSampleRate?: double|null,
     *     GuestRoleArn?: string|null,
     *     AllowCookies?: bool|null,
     *     Telemetries?: list<'errors'|'performance'|'http'>|null,
     *     EnableXRay?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
