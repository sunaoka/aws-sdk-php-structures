<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $id
 * @property string $dnsSubdomain
 * @property string $name
 * @property 'CREATING'|'ACTIVE'|'DELETING' $status
 */
class CreateApplicationResponse extends Response
{
}
