<?php

namespace Sunaoka\Aws\Structures\AppRegistry\GetAssociatedResource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ResourceShape|null $resource
 * @property list<'APPLY_APPLICATION_TAG'|'SKIP_APPLICATION_TAG'>|null $options
 * @property Shapes\ApplicationTagResult|null $applicationTagResult
 */
class GetAssociatedResourceResponse extends Response
{
}
