<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\UpdateClone;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DomainName
 * @property string $ChangeId
 * @property Shapes\CutoverOptions|null $CutoverOptions
 * @property Shapes\TrafficSplitOptions|null $TrafficSplitOptions
 * @property Shapes\RetentionOptions|null $RetentionOptions
 */
class UpdateCloneResponse extends Response
{
}
