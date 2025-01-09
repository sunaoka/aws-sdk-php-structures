<?php

namespace Sunaoka\Aws\Structures\AppSync\GetDataSourceIntrospection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $introspectionId
 * @property 'PROCESSING'|'FAILED'|'SUCCESS' $introspectionStatus
 * @property string $introspectionStatusDetail
 * @property Shapes\DataSourceIntrospectionResult $introspectionResult
 */
class GetDataSourceIntrospectionResponse extends Response
{
}
