<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListTagsForResource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ResourceARN
 * @property string|null $Marker
 * @property list<Shapes\Tag>|null $Tags
 */
class ListTagsForResourceResponse extends Response
{
}
