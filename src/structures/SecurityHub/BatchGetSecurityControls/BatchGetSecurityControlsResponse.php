<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchGetSecurityControls;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\SecurityControl> $SecurityControls
 * @property list<Shapes\UnprocessedSecurityControl>|null $UnprocessedIds
 */
class BatchGetSecurityControlsResponse extends Response
{
}
