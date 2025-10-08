<?php

namespace Sunaoka\Aws\Structures\IoTSecureTunneling;

class IoTSecureTunnelingClient extends \Aws\IoTSecureTunneling\IoTSecureTunnelingClient
{
    use CloseTunnel\CloseTunnelTrait;
    use DescribeTunnel\DescribeTunnelTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTunnels\ListTunnelsTrait;
    use OpenTunnel\OpenTunnelTrait;
    use RotateTunnelAccessToken\RotateTunnelAccessTokenTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
