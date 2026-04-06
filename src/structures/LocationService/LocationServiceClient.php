<?php

namespace Sunaoka\Aws\Structures\LocationService;

class LocationServiceClient extends \Aws\LocationService\LocationServiceClient
{
    use AssociateTrackerConsumer\AssociateTrackerConsumerTrait;
    use BatchDeleteDevicePositionHistory\BatchDeleteDevicePositionHistoryTrait;
    use BatchDeleteGeofence\BatchDeleteGeofenceTrait;
    use BatchEvaluateGeofences\BatchEvaluateGeofencesTrait;
    use BatchGetDevicePosition\BatchGetDevicePositionTrait;
    use BatchPutGeofence\BatchPutGeofenceTrait;
    use BatchUpdateDevicePosition\BatchUpdateDevicePositionTrait;
    use CalculateRoute\CalculateRouteTrait;
    use CalculateRouteMatrix\CalculateRouteMatrixTrait;
    use CreateGeofenceCollection\CreateGeofenceCollectionTrait;
    use CreateKey\CreateKeyTrait;
    use CreateMap\CreateMapTrait;
    use CreatePlaceIndex\CreatePlaceIndexTrait;
    use CreateRouteCalculator\CreateRouteCalculatorTrait;
    use CreateTracker\CreateTrackerTrait;
    use DeleteGeofenceCollection\DeleteGeofenceCollectionTrait;
    use DeleteKey\DeleteKeyTrait;
    use DeleteMap\DeleteMapTrait;
    use DeletePlaceIndex\DeletePlaceIndexTrait;
    use DeleteRouteCalculator\DeleteRouteCalculatorTrait;
    use DeleteTracker\DeleteTrackerTrait;
    use DescribeGeofenceCollection\DescribeGeofenceCollectionTrait;
    use DescribeKey\DescribeKeyTrait;
    use DescribeMap\DescribeMapTrait;
    use DescribePlaceIndex\DescribePlaceIndexTrait;
    use DescribeRouteCalculator\DescribeRouteCalculatorTrait;
    use DescribeTracker\DescribeTrackerTrait;
    use DisassociateTrackerConsumer\DisassociateTrackerConsumerTrait;
    use ForecastGeofenceEvents\ForecastGeofenceEventsTrait;
    use GetDevicePosition\GetDevicePositionTrait;
    use GetDevicePositionHistory\GetDevicePositionHistoryTrait;
    use GetGeofence\GetGeofenceTrait;
    use GetMapGlyphs\GetMapGlyphsTrait;
    use GetMapSprites\GetMapSpritesTrait;
    use GetMapStyleDescriptor\GetMapStyleDescriptorTrait;
    use GetMapTile\GetMapTileTrait;
    use GetPlace\GetPlaceTrait;
    use ListDevicePositions\ListDevicePositionsTrait;
    use ListGeofenceCollections\ListGeofenceCollectionsTrait;
    use ListGeofences\ListGeofencesTrait;
    use ListKeys\ListKeysTrait;
    use ListMaps\ListMapsTrait;
    use ListPlaceIndexes\ListPlaceIndexesTrait;
    use ListRouteCalculators\ListRouteCalculatorsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTrackerConsumers\ListTrackerConsumersTrait;
    use ListTrackers\ListTrackersTrait;
    use PutGeofence\PutGeofenceTrait;
    use SearchPlaceIndexForPosition\SearchPlaceIndexForPositionTrait;
    use SearchPlaceIndexForSuggestions\SearchPlaceIndexForSuggestionsTrait;
    use SearchPlaceIndexForText\SearchPlaceIndexForTextTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateGeofenceCollection\UpdateGeofenceCollectionTrait;
    use UpdateKey\UpdateKeyTrait;
    use UpdateMap\UpdateMapTrait;
    use UpdatePlaceIndex\UpdatePlaceIndexTrait;
    use UpdateRouteCalculator\UpdateRouteCalculatorTrait;
    use UpdateTracker\UpdateTrackerTrait;
    use VerifyDevicePosition\VerifyDevicePositionTrait;
}
