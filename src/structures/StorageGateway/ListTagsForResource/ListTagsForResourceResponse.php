<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListTagsForResource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ResourceARN
 * @property string $Marker
 * @property list<Shapes\Tag> $Tags
 */
class ListTagsForResourceResponse extends Response
{
}
