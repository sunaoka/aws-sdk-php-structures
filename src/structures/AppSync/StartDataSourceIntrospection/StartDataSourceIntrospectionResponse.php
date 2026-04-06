<?php

namespace Sunaoka\Aws\Structures\AppSync\StartDataSourceIntrospection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $introspectionId
 * @property 'PROCESSING'|'FAILED'|'SUCCESS'|null $introspectionStatus
 * @property string|null $introspectionStatusDetail
 */
class StartDataSourceIntrospectionResponse extends Response
{
}
