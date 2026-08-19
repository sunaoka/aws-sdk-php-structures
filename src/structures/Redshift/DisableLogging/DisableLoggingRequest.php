<?php

namespace Sunaoka\Aws\Structures\Redshift\DisableLogging;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property 's3'|'cloudwatch'|'s3table'|null $LogDestinationType
 * @property list<string>|null $LogExports
 */
class DisableLoggingRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier: string,
     *     LogDestinationType?: 's3'|'cloudwatch'|'s3table'|null,
     *     LogExports?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
