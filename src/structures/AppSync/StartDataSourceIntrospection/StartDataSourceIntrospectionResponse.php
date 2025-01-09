<?php

namespace Sunaoka\Aws\Structures\AppSync\StartDataSourceIntrospection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $introspectionId
 * @property 'PROCESSING'|'FAILED'|'SUCCESS' $introspectionStatus
 * @property string $introspectionStatusDetail
 */
class StartDataSourceIntrospectionResponse extends Response
{
}
