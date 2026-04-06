<?php

namespace Sunaoka\Aws\Structures\MarketplaceDeployment;

class MarketplaceDeploymentClient extends \Aws\MarketplaceDeployment\MarketplaceDeploymentClient
{
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutDeploymentParameter\PutDeploymentParameterTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
