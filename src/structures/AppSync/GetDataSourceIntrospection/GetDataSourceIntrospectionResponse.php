<?php

namespace Sunaoka\Aws\Structures\AppSync\GetDataSourceIntrospection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $introspectionId
 * @property 'PROCESSING'|'FAILED'|'SUCCESS'|null $introspectionStatus
 * @property string|null $introspectionStatusDetail
 * @property Shapes\DataSourceIntrospectionResult|null $introspectionResult
 */
class GetDataSourceIntrospectionResponse extends Response
{
}
